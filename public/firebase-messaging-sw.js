importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js');
   
firebase.initializeApp({
    apiKey: "AIzaSyAvdjnJXvI5NEb6PAQ0EQ_SaSyZ0SYDgmA",
    projectId: "therapyturst",
    messagingSenderId: "365060112929",
    appId: "1:365060112929:web:39c8ecb04ea5bcdf26d960"
});
  
const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function({data:{title,body,icon}}) {
    return self.registration.showNotification(title,{body,icon});
});