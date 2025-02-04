# aplayer

aplayer is a simple audio player created using Devel Next Studio. This project is written in PHP and designed for playing audio files with basic controls.

## 🎵 Features
- Play, pause, and stop audio files
- Open multiple files using the file chooser
- Playlist support with list view
- Slider for audio navigation
- Displays the current playing file name
- Supported formats: MP3, WAV, AIF

## 💡 Requirements
- Devel Next Studio
- PHP support with GUI framework

## 🛠 Installation
1. Install Devel Next Studio.
2. Import the project into Devel Next Studio.
3. Run the project directly from the IDE.

## 🎬 Usage
- **Open Files:** Click the "Open" button to select multiple files.
- **Play:** Select an item from the playlist and click the "Play" button.
- **Pause:** Click the "Pause" button.
- **Stop:** Click the "Stop" button.
- **Seek Audio:** Drag the slider to navigate within the track.
- **Supported Formats:** Click the "Info" button to view supported formats.

## 🌍 Code Structure
- **doButtonAction():** Opens files and adds them to the playlist
- **doButtonAltAction():** Plays the selected audio file
- **doButton3Action():** Pauses audio playback
- **doButton4Action():** Stops audio playback
- **doListViewAction():** Opens selected file from the playlist
- **Slider Events:** Manages playback position control
- **doButton5Action():** Displays supported formats

## 🌟 Future Improvements
- Adding shuffle and repeat modes
- Volume control integration
- Enhanced playlist management

## 🚩 License
MIT License
