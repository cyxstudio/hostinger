//C:\Users\cyxstudio\AppData\Local\Google\Chrome\User Data\Default\Bookmark

import json_data from './chrome.json' assert {type: 'json'};

console.log(json_data)

function importChrome(json_data) {

    const bookmarks = json_data.roots.bookmark_bar.children
    console.log(bookmarks)
    return bookmarks
    

}

let chromeBookmarks = importChrome(json_data)

export { chromeBookmarks }