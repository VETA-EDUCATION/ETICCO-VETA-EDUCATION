/*
Copyright (c) 2010, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.com/yui/license.html
version: 3.3.0
build: 3167
*/
YUI.add('highlight-base', function(Y) {

/**
 * Provides methods for highlighting strings within other strings by wrapping
 * them in HTML.
 *
 * @module highlight
 * @since 3.3.0
 */

/**
 * <p>
 * Provides methods for highlighting strings within other strings by wrapping
 * them in HTML.
 * </p>
 *
 * <p>
 * The highlight methods first escape any special HTML characters in the input
 * strings and then highlight the appropriate substrings by wrapping them in a
 * <code>&lt;b class="yui3-highlight"&gt;&lt;/b&gt;</code> element. The
 * <code>&lt;b&gt;</code> element is used rather than
 * <code>&lt;strong&gt;</code> in accordance with HTML5's definition of
 * <code>&lt;b&gt;</code> as being purely presentational, which is exactly what
 * highlighting is.
 * </p>
 *
 * @module highlight
 * @submodule highlight-base
 * @class Highlight
 * @static
 */

var YArray    = Y.Array,
    Escape    = Y.Escape,
    WordBreak = Y.Text.WordBreak,

    isArray = Y.Lang.isArray,

    EMPTY_OBJECT = {},

    // Regex string that captures zero or one unclosed HTML entities. Used in
    // the static regex template properties below. The entity matching is
    // intentionally loose here, since there's a world of complexity involved in
    // doing strict matching for this use case.
    UNCLOSED_ENTITY = '(&[^;\\s]*)?',

Highlight = {
    // -- Protected Static Properties ------------------------------------------

    /**
     * <p>
     * Regular expression template for highlighting a match that occurs anywhere
     * in a string. The placeholder <code>%needles</code> will be replaced with
     * a list of needles to match, joined by <code>|</code> characters.
     * </p>
     *
     * <p>
     * This regex should have two capturing subpatterns: the first should match
     * an unclosed HTML entity (e.g. "&amp" without a ";" at the end) 0 or 1
     * times; the second should contain the <code>%needles</code> placeholder.
     * The first subpattern match is used to emulate a negative lookbehind
     * assertion, in order to prevent highlighting inside HTML entities.
     * </p>
     *
     * @property _REGEX
     * @type {String}
     * @protected
     * @static
     * @final
     */
    _REGEX: UNCLOSED_ENTITY + '(%needles)',

    /**
     * Regex replacer function or string for normal matches.
     *
     * @property _REPLACER
     * @type {Function|String}
     * @protected
     * @static
     * @final
     */
    _REPLACER: function (match, p1, p2) {
         // Mimicking a negative lookbehind assertion to prevent matches inside
         // HTML entities. Hat tip to Steven Levithan for the technique:
         // http://blog.stevenlevithan.com/archives/mimic-lookbehind-javascript
         return p1 && !(/\s/).test(p2) ? match :
                    Highlight._TEMPLATE.replace(/\{s\}/g, p2);
     },

    /**
     * <p>
     * Regular expression template for highlighting start-of-string matches
     * (i.e., only matches that occur at the beginning of a string). The
     * placeholder <code>%needles</code> will be replaced with a list of needles
     * to match, joined by <code>|</code> characters.
     * </p>
     *
     * <p>
     * See <code>_REGEX</code> for a description of the capturing subpatterns
     * this regex should contain.
     * </p>
     *
     * @property _START_REGEX
     * @type {String}
     * @protected
     * @static
     * @final
     */
    _START_REGEX: '^' + UNCLOSED_ENTITY + '(%needles)',

    /**
     * Highlight template which will be used as a replacement for matched
     * substrings. The placeholder <code>{s}</code> will be replaced with the
     * matched substring.
     *
     * @property _TEMPLATE
     * @type {String}
     * @default '<b class="yui3-highlight">{s}</b>'
     * @protected
     * @static
     * @final
     */
    _TEMPLATE: '<b class="yui3-highlight">{s}</b>',

    // -- Public Static Methods ------------------------------------------------

    /**
     * Highlights all occurrences in the <em>haystack</em> string of the items
     * in the <em>needles</em> array, regardless of where they occur. The
     * returned string will have all HTML characters escaped except for the
     * highlighting markup.
     *
     * @method all
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings that should be
     *   highlighted.
     * @param {Object} options (optional) Options object, which may contain
     *   zero or more of the following properties:
     *
     * <dl>
     *   <dt>caseSensitive (Boolean)</dt>
     *   <dd>
     *     If <code>true</code>, matching will be case-sensitive. Default is
     *     <code>false</code>.
     *   </dd>
     *
     *   <dt>startsWith (Boolean)<dt>
     *   <dd>
     *     By default, needles are highlighted wherever they appear in the
     *     haystack. If <code>startsWith</code> is <code>true</code>, matches
     *     must be anchored to the beginning of the string.
     *   </dd>
     * </dl>
     *
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    all: function (haystack, needles, options) {
        var i, len, regex, replacer;

        if (!options) {
            options = EMPTY_OBJECT;
        }

        // TODO: document options.replacer
        regex    = options.startsWith ? Highlight._START_REGEX : Highlight._REGEX;
        replacer = options.replacer || Highlight._REPLACER;

        // Create a local copy of needles so we can safely modify it in the next
        // step.
        needles = isArray(needles) ? needles.concat() : [needles];

        // Escape HTML characters and special regular expression characters in
        // the needles so they can be used in a regex and matched against the
        // escaped haystack.
        for (i = 0, len = needles.length; i < len; ++i) {
            needles[i] = Escape.regex(Escape.html(needles[i]));
        }

        // Escape HTML characters in the haystack to prevent HTML injection.
        haystack = Escape.html(haystack);

        return haystack.replace(
            new RegExp(
                regex.replace('%needles', needles.join('|')),
                options.caseSensitive ? 'g' : 'gi'
            ),
            replacer
        );
    },

    /**
     * Same as <code>all()</code>, but case-sensitive by default.
     *
     * @method allCase
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings that should be
     *   highlighted.
     * @param {Object} options (optional) Options object. See <code>all()</code>
     *   for details.
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    allCase: function (haystack, needles, options) {
        return Highlight.all(haystack, needles,
                Y.merge(options || EMPTY_OBJECT, {caseSensitive: true}));
    },

    /**
     * Highlights <em>needles</em> that occur at the start of <em>haystack</em>.
     * The returned string will have all HTML characters escaped except for the
     * highlighting markup.
     *
     * @method start
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings that should be
     *   highlighted.
     * @param {Object} options (optional) Options object, which may contain
     *   zero or more of the following properties:
     *
     * <dl>
     *   <dt>caseSensitive (Boolean)</dt>
     *   <dd>
     *     If <code>true</code>, matching will be case-sensitive. Default is
     *     <code>false</code>.
     *   </dd>
     * </dl>
     *
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    start: function (haystack, needles, options) {
        return Highlight.all(haystack, needles,
                Y.merge(options || EMPTY_OBJECT, {startsWith: true}));
    },

    /**
     * Same as <code>start()</code>, but case-sensitive by default.
     *
     * @method startCase
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings that should be
     *   highlighted.
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    startCase: function (haystack, needles) {
        // No options passthru for now, since it would be redundant. If start()
        // ever supports more options than caseSensitive, then we'll start
        // passing the options through.
        return Highlight.start(haystack, needles, {caseSensitive: true});
    },

    /**
     * Highlights complete words in the <em>haystack</em> string that are also
     * in the <em>needles</em> array. The returned string will have all HTML
     * characters escaped except for the highlighting markup.
     *
     * @method words
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings containing words
     *   that should be highlighted. If a string is passed, it will be split
     *   into words; if an array is passed, it is assumed to have already been
     *   split.
     * @param {Object} options (optional) Options object, which may contain
     *   zero or more of the following properties:
     *
     * <dl>
     *   <dt>caseSensitive (Boolean)</dt>
     *   <dd>
     *     If <code>true</code>, matching will be case-sensitive. Default is
     *     <code>false</code>.
     *   </dd>
     * </dl>
     *
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    words: function (haystack, needles, options) {
        var caseSensitive,
            mapper,
            template = Highlight._TEMPLATE,
            words;

        if (!options) {
            options = EMPTY_OBJECT;
        }

        caseSensitive = !!options.caseSensitive;

        // Convert needles to a hash for faster lookups.
        needles = YArray.hash(
            isArray(needles) ? needles : WordBreak.getUniqueWords(needles, {
                ignoreCase: !caseSensitive
            })
        );

        // The default word mapping function can be overridden with a custom
        // one. This is used to implement accent-folded highlighting in the
        // highlight-accentfold module.
        mapper = options.mapper || function (word, needles) {
            if (needles.hasOwnProperty(caseSensitive ? word : word.toLowerCase())) {
                return template.replace(/\{s\}/g, Escape.html(word));
            }

            return Escape.html(word);
        };

        // Split the haystack into an array of words, including punctuation and
        // whitespace so we can rebuild the string later.
        words = WordBreak.getWords(haystack, {
            includePunctuation: true,
            includeWhitespace : true
        });

        return YArray.map(words, function (word) {
            return mapper(word, needles);
        }).join('');
    },

    /**
     * Same as <code>words()</code>, but case-sensitive by default.
     *
     * @method wordsCase
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings containing words
     *   that should be highlighted. If a string is passed, it will be split
     *   into words; if an array is passed, it is assumed to have already been
     *   split.
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    wordsCase: function (haystack, needles) {
        // No options passthru for now, since it would be redundant. If words()
        // ever supports more options than caseSensitive, then we'll start
        // passing the options through.
        return Highlight.words(haystack, needles, {caseSensitive: true});
    }
};

Y.Highlight = Highlight;


}, '3.3.0' ,{requires:['array-extras', 'escape', 'text-wordbreak']});
YUI.add('highlight-accentfold', function(Y) {

/**
 * Adds accent-folding highlighters to <code>Y.Highlight</code>.
 *
 * @module highlight
 * @submodule highlight-accentfold
 */

/**
 * @class Highlight
 * @static
 */

var AccentFold = Y.Text.AccentFold,
    Escape     = Y.Escape,

    EMPTY_OBJECT = {},

Highlight = Y.mix(Y.Highlight, {
    // -- Public Static Methods ------------------------------------------------

    /**
     * Accent-folding version of <code>all()</code>.
     *
     * @method allFold
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings that should be
     *   highlighted.
     * @param {Object} options (optional) Options object, which may contain
     *   zero or more of the following properties:
     *
     * <dl>
     *   <dt>startsWith (Boolean)<dt>
     *   <dd>
     *     By default, needles are highlighted wherever they appear in the
     *     haystack. If <code>startsWith</code> is <code>true</code>, matches
     *     must be anchored to the beginning of the string.
     *   </dd>
     * </dl>
     *
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    allFold: function (haystack, needles, options) {
        var template = Highlight._TEMPLATE,
            result   = [],
            startPos = 0;

        options = Y.merge({
            // While the highlight regex operates on the accent-folded strings,
            // this replacer will highlight the matched positions in the
            // original string.
            //
            // Note: this implementation doesn't handle multi-character folds,
            // like "??" -> "ae". Doing so correctly would be prohibitively
            // expensive both in terms of code size and runtime performance, so
            // I've chosen to take the pragmatic route and just not do it at
            // all. This is one of many reasons why accent folding is best done
            // on the server.
            replacer: function (match, p1, foldedNeedle, pos) {
                var len;

                // Ignore matches inside HTML entities.
                if (p1 && !(/\s/).test(foldedNeedle)) {
                    return match;
                }

                len = foldedNeedle.length;

                result.push(haystack.substring(startPos, pos) +
                        template.replace(/\{s\}/g, haystack.substr(pos, len)));

                startPos = pos + len;
            }
        }, options || EMPTY_OBJECT);

        // Run the highlighter on the folded strings. We don't care about the
        // output; our replacer function will build the canonical highlighted
        // string, with original accented characters.
        Highlight.all(AccentFold.fold(haystack), AccentFold.fold(needles),
                options);

        // Tack on the remainder of the haystack that wasn't highlighted, if
        // any.
        if (startPos < haystack.length - 1) {
            result.push(haystack.substr(startPos));
        }

        return result.join('');
    },

    /**
     * Accent-folding version of <code>start()</code>.
     *
     * @method startFold
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings that should be
     *   highlighted.
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    startFold: function (haystack, needles) {
        return Highlight.allFold(haystack, needles, {startsWith: true});
    },

    /**
     * Accent-folding version of <code>words()</code>.
     *
     * @method wordsFold
     * @param {String} haystack String to apply highlighting to.
     * @param {String|Array} needles String or array of strings containing words
     *   that should be highlighted. If a string is passed, it will be split
     *   into words; if an array is passed, it is assumed to have already been
     *   split.
     * @return {String} Escaped and highlighted copy of <em>haystack</em>.
     * @static
     */
    wordsFold: function (haystack, needles) {
        var template = Highlight._TEMPLATE;

        return Highlight.words(haystack, AccentFold.fold(needles), {
            mapper: function (word, needles) {
                if (needles.hasOwnProperty(AccentFold.fold(word))) {
                    return template.replace(/\{s\}/g, Escape.html(word));
                }

                return Escape.html(word);
            }
        });
    }
});


}, '3.3.0' ,{requires:['highlight-base', 'text-accentfold']});


YUI.add('highlight', function(Y){}, '3.3.0' ,{use:['highlight-base', 'highlight-accentfold']});

