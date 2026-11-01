# Wiki DYK Share Tool translations

Upload these files to the `language/` folder of the `wikipedia-dyk` GitHub Pages repository.
The tool hosted at https://wiki-dyk.toolforge.org/ reads the language catalogue and translation JSON files from:
https://suyashdwivedi.github.io/wikipedia-dyk/language/

## Files

- `languages.json` lists the languages shown in the tool's language selector.
- Each language has a JSON file, such as `hi.json`.

## Add another language

1. In Wiki DYK Share Tool, choose **Download translation template**.
2. Set the template's `code` to the language code (for example `bn`, `ta`, `ur`, `fr`).
3. Set `name` to the language's own name, and set `dir` to `rtl` for right-to-left scripts or `ltr` otherwise.
4. Translate the values in the `translations` object. Keep the English keys unchanged. Leave a value empty if it should fall back to English.
5. Save the file as `<code>.json` in this folder.
6. Add an entry to `languages.json`, for example:

```json
{
  "languages": [
    {
      "code": "hi",
      "name": "हिन्दी",
      "file": "hi.json",
      "dir": "ltr"
    },
    {
      "code": "sv",
      "name": "svenska",
      "file": "sv.json",
      "dir": "ltr"
    }
  ]
}
```

7. Commit and push. The language should appear in the tool after the GitHub Pages update is published.

## Translation format

```json
{
  "code": "hi",
  "name": "हिन्दी",
  "dir": "ltr",
  "translations": {
    "Interface language": "इंटरफ़ेस भाषा",
    "Download translation template": "अनुवाद टेम्पलेट डाउनलोड करें"
  }
}
```

Only translate the values, not the English keys. Article content itself is intentionally not translated by this interface layer. Missing UI translations remain in English.
