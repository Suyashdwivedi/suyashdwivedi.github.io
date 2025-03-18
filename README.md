# Wikipedia Recent Changes Viewer

This project allows you to view the recent changes made across different Wikipedia languages in real time. It fetches recent changes through Wikipedia's API and displays information about the changes, including the title of the page, the editor's username, timestamp, and comments. The data is refreshed every 20 seconds, ensuring the information stays up-to-date.

The project supports multiple languages, including Hindi, English, and other major Indian languages like Bengali, Tamil, Telugu, Kannada, Marathi, and more. It also supports Tulu Wikipedia.

## Author

**Suyash Dwivedi**  
[User:Suyash.dwivedi](https://meta.wikimedia.org/wiki/User:Suyash.dwivedi)  

![Suyash Dwivedi](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Suyash_Dwivedi_01%28cropped%29.jpg/180px-Suyash_Dwivedi_01%28cropped%29.jpg)  

**Wikipedia User**: [Suyash Dwivedi](https://meta.wikimedia.org/wiki/User:Suyash.dwivedi)  

## Features

- **Real-time Updates**: Fetches recent changes and updates every 20 seconds.
- **Multi-Language Support**: Choose from a variety of languages, including Hindi, English, and several other Indian and international languages.
- **Detailed Change Information**: Displays detailed information about each change, including the title, user, timestamp, and comment.
- **Date and Time**: Shows both UTC and IST (Indian Standard Time) timestamps for each change.

> ### **Audio Notifications**:
> **Plays a sound notification when new changes are detected, with language-specific audio cues.**  
> This feature is particularly beneficial for users who are **visually impaired (blind)** as it allows them to receive notifications about updates without needing to check the screen. It helps users stay informed while working on other tabs or tasks. The sound notifications ensure they do not miss any important changes.

- **Navigation**: Includes buttons for quick navigation to the top and bottom of the page.

## Supported Languages (As of 18/March/2025):

1. <a href="https://hi.wikipedia.org/" target="_blank">हिन्दी (Hindi)</a>
2. <a href="https://en.wikipedia.org/" target="_blank">English</a>
3. <a href="https://awa.wikipedia.org/" target="_blank">अवधी (Awadhi)</a>
4. <a href="https://ar.wikipedia.org/" target="_blank">العربية (Arabic)</a>
5. <a href="https://as.wikipedia.org/" target="_blank">অসমীয়া (Assamese)</a>
6. <a href="https://bh.wikipedia.org/" target="_blank">भोजपुरी (Bhojpuri)</a>
7. <a href="https://bn.wikipedia.org/" target="_blank">বাংলা (Bengali)</a>
8. <a href="https://bcl.wikipedia.org/" target="_blank">Bikol Central (Central Bikol)</a>
9. <a href="https://zh.wikipedia.org/" target="_blank">中文 (Chinese)</a>
10. <a href="https://da.wikipedia.org/" target="_blank">Dansk (Danish)</a>
11. <a href="https://de.wikipedia.org/" target="_blank">Deutsch (German)</a>
12. <a href="https://es.wikipedia.org/" target="_blank">Español (Spanish)</a>
13. <a href="https://fa.wikipedia.org/" target="_blank">فارسی (Persian)</a>
14. <a href="https://fr.wikipedia.org/" target="_blank">Français (French)</a>
15. <a href="https://hif.wikipedia.org/" target="_blank">Fiji Hindi (Fijian Hindi)</a>
16. <a href="https://he.wikipedia.org/" target="_blank">עברית (Hebrew)</a>
17. <a href="https://it.wikipedia.org/" target="_blank">Italiano (Italian)</a>
18. <a href="https://ja.wikipedia.org/" target="_blank">日本語 (Japanese)</a>
19. <a href="https://jv.wikipedia.org/" target="_blank">Basa Jawa (Javanese)</a>
20. <a href="https://kn.wikipedia.org/" target="_blank">ಕನ್ನಡ (Kannada)</a>
21. <a href="https://ko.wikipedia.org/" target="_blank">한국어 (Korean)</a>
22. <a href="https://ml.wikipedia.org/" target="_blank">മലയാളം (Malayalam)</a>
23. <a href="https://mr.wikipedia.org/" target="_blank">मराठी (Marathi)</a>
24. <a href="https://ms.wikipedia.org/" target="_blank">Bahasa Melayu (Malay)</a>
25. <a href="https://ne.wikipedia.org/" target="_blank">नेपाली (Nepali)</a>
26. <a href="https://nl.wikipedia.org/" target="_blank">Nederlands (Dutch)</a>
27. <a href="https://pa.wikipedia.org/" target="_blank">ਪੰਜਾਬੀ (Punjabi)</a>
28. <a href="https://pl.wikipedia.org/" target="_blank">Polski (Polish)</a>
29. <a href="https://pt.wikipedia.org/" target="_blank">Português (Portuguese)</a>
30. <a href="https://ru.wikipedia.org/" target="_blank">Русский (Russian)</a>
31. <a href="https://sa.wikipedia.org/" target="_blank">संस्कृतम् (Sanskrit)</a>
32. <a href="https://si.wikipedia.org/" target="_blank">සිංහල (Sinhala)</a>
33. <a href="https://ta.wikipedia.org/" target="_blank">தமிழ் (Tamil)</a>
34. <a href="https://te.wikipedia.org/" target="_blank">తెలుగు (Telugu)</a>
35. <a href="https://th.wikipedia.org/" target="_blank">ไทย (Thai)</a>
36. <a href="https://tr.wikipedia.org/" target="_blank">Türkçe (Turkish)</a>
37. <a href="https://uk.wikipedia.org/" target="_blank">Українська (Ukrainian)</a>
38. <a href="https://ur.wikipedia.org/" target="_blank">اردو (Urdu)</a>
39. <a href="https://uz.wikipedia.org/" target="_blank">Oʻzbekcha (Uzbek)</a>
40. <a href="https://vi.wikipedia.org/" target="_blank">Tiếng Việt (Vietnamese)</a>
41. <a href="https://gu.wikipedia.org/" target="_blank">ગુજરાતી (Gujarati)</a>


## Installation

To use the Wikipedia Recent Changes Viewer locally, follow these steps:

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/wikipedia-recent-changes-viewer.git
    ```

2. Open the `index.html` file in your browser.

3. You can choose the language from the dropdown menu, and the recent changes for that language will be displayed.

## How It Works

- The recent changes are fetched from the Wikipedia API using a simple query that retrieves a list of recent changes, including the title, user, timestamp, and comments.
- The data is refreshed every 20 seconds to ensure the page shows the most recent changes.
- The date and time of the changes are displayed in both UTC and IST.
- Language-specific audio files are used to play a sound notification when new changes are detected. This helps **visually impaired users** by alerting them to updates, so they can focus on other tasks or tabs without missing important changes.

## Date and Time of Update

The recent changes data is refreshed every 20 seconds. The **Date and Time** of the most recent update will be displayed in both **UTC** and **Indian Standard Time (IST)**. The page will show the **exact timestamp** when the data was last fetched, ensuring users are aware of the recency of the changes.

## Date and Time of Code Updates

This project is continuously updated and maintained. The **Date and Time of the most recent code update** is shown below. This timestamp indicates when the code repository was last updated.

- **Last Code Update**: _Tuesday, 12 November 2024, at 11:43:27 AM (IST)_

## License

This project is licensed under the [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/) license.

## Credits

Special thanks to the [Wikipedia](https://www.wikipedia.org/) for the public API and the data used in this project.

## Acknowledgments

- The project uses the Wikipedia API for fetching recent changes.
- The sound files used for notifications are in MP3 format.
