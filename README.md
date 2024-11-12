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

## Supported Languages (As of 12/November/2024)

## Language List

- **Hindi** - हिन्दी (hi) (default)
- **English** - English (en)
- **Arabic** - العربية (ar)
- **Awadhi** - अवधी (awa)
- **Bengali** - বাংলা (bn)
- **Cebuano** - Sinugboanon (ceb)
- **Chinese** - 中文 (zh)
- **Dutch** - Nederlands (nl)
- **French** - Français (fr)
- **German** - Deutsch (de)
- **Italian** - Italiano (it)
- **Japanese** - 日本語 (ja)
- **Kannada** - ಕನ್ನಡ (kn)
- **Malay** - Bahasa Melayu (ms)
- **Marathi** - मराठी (mr)
- **Persian** - فارسی (fa)
- **Polish** - Polski (pl)
- **Portuguese** - Português (pt)
- **Punjabi** - ਪੰਜਾਬੀ (pa)
- **Russian** - Русский (ru)
- **Spanish** - Español (es)
- **Tamil** - தமிழ் (ta)
- **Telugu** - తెలుగు (te)
- **Thai** - ไทย (th)
- **Turkish** - Türkçe (tr)
- **Tulu** - ತುಳು (tcy)
- **Ukrainian** - Українська (uk)
- **Vietnamese** - Tiếng Việt (vi)
  
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
