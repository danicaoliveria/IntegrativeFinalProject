const unReadMessages = document.querySelectorAll('.unread');
const unreadMessagesCount = document.getElementById('num-of-notif');
const markAll = document.getElementById('mark-as-read');

unreadMessagesCount.innerText = unReadMessages.length;

unReadMessages.forEach((message) => {
    message.addEventListener('click', () => {
        message.classList.remove('unread');
        const newUnreadMessages = document.querySelectorAll('.unread');
        unreadMessagesCount.innerText = newUnreadMessages.length;
    });
});

markAll.addEventListener('click', () => {
    unReadMessages.forEach((message) => {
        message.classList.remove('unread');
    })
    const newUnreadMessages = document.querySelectorAll('.unread');
    unreadMessagesCount.innerHTML = newUnreadMessages.length;
})