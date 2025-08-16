# Workcity Chat - WordPress Plugin

A WordPress plugin that integrates a React-based chat application into your WordPress website.

## Plugin Overview

Workcity Chat is a simple WordPress plugin that allows you to add a modern React chat widget to any page or post on your WordPress site. The plugin provides an easy shortcode integration and handles all the necessary scripts and styles.

## Notes

- **React Build Files**: Place your compiled React application files in the `assets/js/` directory
- **Stylesheets**: Add your CSS files to the `assets/css/` directory
- **File Naming**: Make sure your main JavaScript file is properly referenced in the plugin's enqueue functions
- **Dependencies**: The plugin will automatically handle WordPress dependencies like jQuery if needed
- **Compatibility**: Tested with WordPress 5.0+

## Features

- **React Chat Widget** - Modern, responsive chat interface built with React
- **Shortcode Integration** - Easy to use `[workcity_chat]` shortcode
- **Automatic Asset Loading** - Enqueues JavaScript and CSS files automatically

## Installation

Follow these steps to install the Workcity Chat plugin:

1. **Download the Plugin**

   - Download the `workcity-chat-wordpress` folder

2. **Upload to WordPress**

   - Upload the entire `workcity-chat-wordpress` folder to your `/wp-content/plugins/` directory
   - Or upload the plugin ZIP file through WordPress Admin → Plugins → Add New → Upload Plugin

3. **Activate the Plugin**

   - Go to WordPress Admin → Plugins
   - Find "Workcity Chat" in the plugin list
   - Click "Activate"

4. **Add the Shortcode**
   - Edit any page or post where you want the chat to appear
   - Add the shortcode `[workcity_chat]` in the content

## Usage

To display the chat widget on your website, simply use the shortcode:

```
[workcity_chat]
```

You can add this shortcode to:

- Pages
- Posts
- Widgets (if your theme supports shortcodes in widgets)
- Custom post types

The chat widget will automatically load with all required styles and functionality.

## Folder Structure

```
workcity-chat-wordpress/
├─ workcity-chat-wordpress.php  # Main plugin file
├─ README.md                    # This documentation
├─ assets/                      # Static assets
│  ├─ js/                      # JavaScript files (React build goes here)
│  └─ css/                     # CSS stylesheet files
└─ includes/                    # PHP include files
   └─ chat-shortcode.php       # Shortcode functionality
```
