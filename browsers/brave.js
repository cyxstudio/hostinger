//C:\Users\cyxstudio\AppData\Local\BraveSoftware\Brave-Browser\User Data\Default\Bookmark

import json_data from './brave.json' assert {type: 'json'};

console.log(json_data)

function importBrave(json_data) {

    const bookmarks = json_data.roots.bookmark_bar.children
    console.log(bookmarks)
    return bookmarks
    

}

let braveBookmarks = importBrave(json_data)

export { braveBookmarks }