🚫 **Important Notice**  
Forking this repository is not permitted without written permission from the author.  
Please respect the license and terms of use outlined in the LICENSE file.  
![No Forking Allowed](https://img.shields.io/badge/Forking-Not%20Allowed-red)

# Wikipedia Recent Changes (Live Voice Alerts)

**Live Tool:** <https://suyashdwivedi.github.io/>

Monitor live Wikipedia Recent Changes across **76 languages** in real time with automatic **Text-to-Speech (TTS) voice alerts** and Dark Mode. The tool fetches the latest edits via Wikipedia's public API every **20 seconds**, displays detailed edit cards, and reads out newly detected page changes and editor names aloud.

## Author

**Suyash Dwivedi**  
[User:Suyash.dwivedi](https://meta.wikimedia.org/wiki/User:Suyash.dwivedi)  

![Suyash Dwivedi](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Suyash_Dwivedi_01%28cropped%29.jpg/180px-Suyash_Dwivedi_01%28cropped%29.jpg)  

**Project:** [Wiki's Lazy Coders](https://meta.wikimedia.org/wiki/Wikis_Lazy_Coders)

## Features

- **Real-Time Live Monitoring**: Automatically fetches the latest edits from Wikipedia every **20 seconds**, displaying up to 25 recent changes with a live refresh counter and `NEW` badges for incoming edits.
- **76 Supported Languages**: Covers major Indian, African, Central Asian, ESEAP, European, and global Wikipedia language editions.
- **Smart Voice Alerts (Text-to-Speech)**:
  - Uses your browser's built-in speech synthesis engine to announce new page changes and editors aloud—no external audio files required.
  - **Accessibility-Friendly**: Especially helpful for **visually impaired (blind)** users or editors multitasking on other tabs who want to listen to live Wikipedia activity hands-free.
  - Includes localized speech phrasing in 17 languages (such as Hindi, Bengali, Marathi, Tamil, Telugu, Gujarati, Arabic, Spanish, French, German, Japanese, Chinese, and more), with automatic visual highlighting on the card currently being spoken.
  - Easy one-click **Voice: ON / OFF** toggle saved automatically in your browser.
- **Bot Edit Filter**: Toggle **Show Bot Edits** on or off to focus purely on human edits or include automated bot accounts in both the feed and voice alerts.
- **Detailed Edit Cards**:
  - Clickable links to the **page history** and the **editor's contributions** (with privacy-friendly handling for IP/temporary editors).
  - Displays both **UTC** and your **Local Time** (with timezone name), plus the edit summary/comment.
- **Dark Mode & Mobile-Friendly Design**:
  - Switch between **Light Mode** and **Dark Mode** anytime, with your preference saved locally.
  - Responsive layout with quick **↑ Top** and **↓ Bottom** navigation buttons and Progressive Web App (PWA) support.

## Supported Languages (76 Languages)

1. <a href="https://hi.wikipedia.org/" target="_blank">हिन्दी (Hindi)</a>
2. <a href="https://en.wikipedia.org/" target="_blank">English</a>
3. <a href="https://af.wikipedia.org/" target="_blank">Afrikaans (Africa)</a>
4. <a href="https://am.wikipedia.org/" target="_blank">አማርኛ (Amharic)</a>
5. <a href="https://ar.wikipedia.org/" target="_blank">العربية (Arabic)</a>
6. <a href="https://as.wikipedia.org/" target="_blank">অসমীয়া (Assamese)</a>
7. <a href="https://awa.wikipedia.org/" target="_blank">अवधी (Awadhi)</a>
8. <a href="https://az.wikipedia.org/" target="_blank">Azərbaycanca (Azerbaijani)</a>
9. <a href="https://ban.wikipedia.org/" target="_blank">Basa Bali (Balinese)</a>
10. <a href="https://bcl.wikipedia.org/" target="_blank">Bikol Central (Central Bikol)</a>
11. <a href="https://bh.wikipedia.org/" target="_blank">भोजपुरी (Bhojpuri)</a>
12. <a href="https://bn.wikipedia.org/" target="_blank">বাংলা (Bengali)</a>
13. <a href="https://ceb.wikipedia.org/" target="_blank">Cebuano (Philippines)</a>
14. <a href="https://da.wikipedia.org/" target="_blank">Dansk (Danish)</a>
15. <a href="https://dag.wikipedia.org/" target="_blank">Dagbanli (Dagbani)</a>
16. <a href="https://de.wikipedia.org/" target="_blank">Deutsch (German)</a>
17. <a href="https://es.wikipedia.org/" target="_blank">Español (Spanish)</a>
18. <a href="https://fa.wikipedia.org/" target="_blank">فارسی (Persian)</a>
19. <a href="https://fr.wikipedia.org/" target="_blank">Français (French)</a>
20. <a href="https://gu.wikipedia.org/" target="_blank">ગુજરાતી (Gujarati)</a>
21. <a href="https://ha.wikipedia.org/" target="_blank">Hausa (West Africa)</a>
22. <a href="https://he.wikipedia.org/" target="_blank">עברית (Hebrew)</a>
23. <a href="https://hif.wikipedia.org/" target="_blank">Fiji Hindi (Fiji Baat)</a>
24. <a href="https://id.wikipedia.org/" target="_blank">Bahasa Indonesia (Indonesian)</a>
25. <a href="https://ig.wikipedia.org/" target="_blank">Igbo (Nigeria)</a>
26. <a href="https://ilo.wikipedia.org/" target="_blank">Ilokano (Ilocano)</a>
27. <a href="https://it.wikipedia.org/" target="_blank">Italiano (Italian)</a>
28. <a href="https://ja.wikipedia.org/" target="_blank">日本語 (Japanese)</a>
29. <a href="https://jv.wikipedia.org/" target="_blank">Basa Jawa (Javanese)</a>
30. <a href="https://kk.wikipedia.org/" target="_blank">Қазақша (Kazakh)</a>
31. <a href="https://km.wikipedia.org/" target="_blank">ភាសាខ្មែរ (Khmer)</a>
32. <a href="https://kn.wikipedia.org/" target="_blank">ಕನ್ನಡ (Kannada)</a>
33. <a href="https://ko.wikipedia.org/" target="_blank">한국어 (Korean)</a>
34. <a href="https://ky.wikipedia.org/" target="_blank">Кыргызча (Kyrgyz)</a>
35. <a href="https://lo.wikipedia.org/" target="_blank">ລາວ (Lao)</a>
36. <a href="https://mai.wikipedia.org/" target="_blank">मैथिली (Maithili)</a>
37. <a href="https://mg.wikipedia.org/" target="_blank">Malagasy (Madagascar)</a>
38. <a href="https://mi.wikipedia.org/" target="_blank">Māori (New Zealand)</a>
39. <a href="https://min.wikipedia.org/" target="_blank">Baso Minangkabau (Minangkabau)</a>
40. <a href="https://ml.wikipedia.org/" target="_blank">മലയാളം (Malayalam)</a>
41. <a href="https://mn.wikipedia.org/" target="_blank">Монгол (Mongolian)</a>
42. <a href="https://mr.wikipedia.org/" target="_blank">मराठी (Marathi)</a>
43. <a href="https://ms.wikipedia.org/" target="_blank">Bahasa Melayu (Malay)</a>
44. <a href="https://my.wikipedia.org/" target="_blank">မြန်မာဘာသာ (Burmese)</a>
45. <a href="https://ne.wikipedia.org/" target="_blank">नेपाली (Nepali)</a>
46. <a href="https://nl.wikipedia.org/" target="_blank">Nederlands (Dutch)</a>
47. <a href="https://om.wikipedia.org/" target="_blank">Oromoo (Oromo)</a>
48. <a href="https://pa.wikipedia.org/" target="_blank">ਪੰਜਾਬੀ (Punjabi)</a>
49. <a href="https://pl.wikipedia.org/" target="_blank">Polski (Polish)</a>
50. <a href="https://pt.wikipedia.org/" target="_blank">Português (Portuguese)</a>
51. <a href="https://ru.wikipedia.org/" target="_blank">Русский (Russian)</a>
52. <a href="https://rw.wikipedia.org/" target="_blank">Ikinyarwanda (Kinyarwanda)</a>
53. <a href="https://sa.wikipedia.org/" target="_blank">संस्कृतम् (Sanskrit)</a>
54. <a href="https://si.wikipedia.org/" target="_blank">සිංහල (Sinhala)</a>
55. <a href="https://sm.wikipedia.org/" target="_blank">Gagana Samoa (Samoan)</a>
56. <a href="https://so.wikipedia.org/" target="_blank">Soomaaliga (Somali)</a>
57. <a href="https://su.wikipedia.org/" target="_blank">Basa Sunda (Sundanese)</a>
58. <a href="https://sw.wikipedia.org/" target="_blank">Kiswahili (Swahili)</a>
59. <a href="https://ta.wikipedia.org/" target="_blank">தமிழ் (Tamil)</a>
60. <a href="https://te.wikipedia.org/" target="_blank">తెలుగు (Telugu)</a>
61. <a href="https://tg.wikipedia.org/" target="_blank">Тоҷикӣ (Tajik)</a>
62. <a href="https://th.wikipedia.org/" target="_blank">ไทย (Thai)</a>
63. <a href="https://tk.wikipedia.org/" target="_blank">Türkmençe (Turkmen)</a>
64. <a href="https://tl.wikipedia.org/" target="_blank">Tagalog (Philippines)</a>
65. <a href="https://tr.wikipedia.org/" target="_blank">Türkçe (Turkish)</a>
66. <a href="https://tt.wikipedia.org/" target="_blank">Татарча (Tatar)</a>
67. <a href="https://tw.wikipedia.org/" target="_blank">Twi (Ghana)</a>
68. <a href="https://ug.wikipedia.org/" target="_blank">ئۇيغۇرچە (Uyghur)</a>
69. <a href="https://uk.wikipedia.org/" target="_blank">Українська (Ukrainian)</a>
70. <a href="https://ur.wikipedia.org/" target="_blank">اردو (Urdu)</a>
71. <a href="https://uz.wikipedia.org/" target="_blank">Oʻzbekcha (Uzbek)</a>
72. <a href="https://vi.wikipedia.org/" target="_blank">Tiếng Việt (Vietnamese)</a>
73. <a href="https://war.wikipedia.org/" target="_blank">Winaray (Waray)</a>
74. <a href="https://yo.wikipedia.org/" target="_blank">Yorùbá (West Africa)</a>
75. <a href="https://zh.wikipedia.org/" target="_blank">中文 (Chinese)</a>
76. <a href="https://zu.wikipedia.org/" target="_blank">isiZulu (Zulu)</a>

## How to Use

1. **Open the Live Tool**: Visit <https://suyashdwivedi.github.io/> in your browser (works great on both mobile devices and desktops).
2. **Choose a Wikipedia Language**: Pick any of the **76 languages** from the dropdown menu. Your selection is remembered automatically for future visits.
3. **Listen or Read Live Edits**:
   - Click anywhere on the page or toggle **🔊 Voice: ON** to start listening to real-time voice announcements as new edits arrive every 20 seconds.
   - Check or uncheck **Show Bot Edits** to filter automated bot activity.
   - Switch between **🌙 Dark Mode** and **☀️ Light Mode** to suit your screen preference.

> **Note for Linux Desktop Users:** If your browser does not detect any system text-to-speech voices, install `speech-dispatcher` and `espeak-ng` (for example, `sudo apt install speech-dispatcher espeak-ng`) and restart your browser.

## Date and Time of Code Updates

This project is continuously updated and maintained.

- **Last Code Update**: _21 November 2026_

## License

This project is licensed under the [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/) license.

## Credits & Acknowledgments

- Created by [Suyash Dwivedi](https://meta.wikimedia.org/wiki/User:Suyash.dwivedi) under [Wiki's Lazy Coders](https://meta.wikimedia.org/wiki/Wikis_Lazy_Coders).
- Powered by the public [MediaWiki / Wikipedia Action API](https://www.mediawiki.org/wiki/API:RecentChanges) and the Web Speech API (`speechSynthesis`).
