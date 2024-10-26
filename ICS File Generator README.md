# ICS File Generator for Calendars

This project allows users to generate `.ics` files for calendar events. The generated files can be imported into various calendar applications, enabling easy scheduling of events.

## Features

- **Event Details Input**: Users can input event name, start and end times, location, description, and timezone.
- **Timezone Support**: A comprehensive list of time zones is provided for accurate scheduling.
- **ICS File Generation**: Generates a downloadable ICS file based on user input.

## Author

![Suyash Dwivedi](https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Suyash_Dwivedi_01%28cropped%29.jpg/180px-Suyash_Dwivedi_01%28cropped%29.jpg)

**Suyash Dwivedi**  
[User:Suyash.dwivedi](https://meta.wikimedia.org/wiki/User:Suyash.dwivedi)

## Demo

To see the ICS File Generator in action, open the [Google Event Creator](https://suyashdwivedi.github.io/Google_event_creator.html) file in a web browser.

## How to Use

1. Clone the repository or download the `Google_event_creator.html` file.
   ```bash
   git clone https://github.com/Suyashdwivedi/ICS-File-Generator.git
   cd ICS-File-Generator
   ```
2. Open the `Google_event_creator.html` file in your web browser.
3. Fill out the event details in the provided form.
4. Click on the **Generate ICS File** button to download your event as an `.ics` file.

## Code Explanation

- The HTML structure consists of a form for inputting event details.
- JavaScript is used to handle the click event, generate the ICS file content, and trigger the download.
- The timezone selection dropdown is populated with various time zones for user convenience.

## License

This project is licensed under the [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/) license.
