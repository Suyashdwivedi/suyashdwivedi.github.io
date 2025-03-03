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

## Supported Languages (As of 02/March/2025):

1. [हिन्दी (Hindi)](https://hi.wikipedia.org/)
2. [English](https://en.wikipedia.org/)
3. [अवधी (Awadhi)](https://awa.wikipedia.org/)
4. [العربية (Arabic)](https://ar.wikipedia.org/)
5. [অসমীয়া (Assamese)](https://as.wikipedia.org/)
6. [भोजपुरी (Bhojpuri)](https://bh.wikipedia.org/)
7. [বাংলা (Bengali)](https://bn.wikipedia.org/)
8. [Bikol Central (Central Bikol)](https://bcl.wikipedia.org/)
9. [中文 (Chinese)](https://zh.wikipedia.org/)
10. [Dansk (Danish)](https://da.wikipedia.org/)
11. [Deutsch (German)](https://de.wikipedia.org/)
12. [Español (Spanish)](https://es.wikipedia.org/)
13. [فارسی (Persian)](https://fa.wikipedia.org/)
14. [Français (French)](https://fr.wikipedia.org/)
15. [Fiji Hindi (Fijian Hindi)](https://hif.wikipedia.org/)
16. [עברית (Hebrew)](https://he.wikipedia.org/)
17. [Italiano (Italian)](https://it.wikipedia.org/)
18. [日本語 (Japanese)](https://ja.wikipedia.org/)
19. [Basa Jawa (Javanese)](https://jv.wikipedia.org/)
20. [ಕನ್ನಡ (Kannada)](https://kn.wikipedia.org/)
21. [한국어 (Korean)](https://ko.wikipedia.org/)
22. [മലയാളം (Malayalam)](https://ml.wikipedia.org/)
23. [मराठी (Marathi)](https://mr.wikipedia.org/)
24. [Bahasa Melayu (Malay)](https://ms.wikipedia.org/)
25. [नेपाली (Nepali)](https://ne.wikipedia.org/)
26. [Nederlands (Dutch)](https://nl.wikipedia.org/)
27. [ਪੰਜਾਬੀ (Punjabi)](https://pa.wikipedia.org/)
28. [Polski (Polish)](https://pl.wikipedia.org/)
29. [Português (Portuguese)](https://pt.wikipedia.org/)
30. [Русский (Russian)](https://ru.wikipedia.org/)
31. [संस्कृतम् (Sanskrit)](https://sa.wikipedia.org/)
32. [සිංහල (Sinhala)](https://si.wikipedia.org/)
33. [தமிழ் (Tamil)](https://ta.wikipedia.org/)
34. [తెలుగు (Telugu)](https://te.wikipedia.org/)
35. [ไทย (Thai)](https://th.wikipedia.org/)
36. [Türkçe (Turkish)](https://tr.wikipedia.org/)
37. [Українська (Ukrainian)](https://uk.wikipedia.org/)
38. [اردو (Urdu)](https://ur.wikipedia.org/)
39. [Oʻzbekcha (Uzbek)](https://uz.wikipedia.org/)
40. [Tiếng Việt (Vietnamese)](https://vi.wikipedia.org/)

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
