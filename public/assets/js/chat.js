var config = {
    apiKey: "AIzaSyAnV-GbTfyhGutT_8MBfRpqSJByRXMZCy0",
    authDomain: "alumni-chat-2e3d6.firebaseapp.com",
    databaseURL: "https://alumni-chat-2e3d6.firebaseio.com",
    projectId: "alumni-chat-2e3d6",
    storageBucket: "alumni-chat-2e3d6.appspot.com",
    messagingSenderId: "377311387120"
};
firebase.initializeApp(config);

var name = document.getElementById('name').innerHTML;        
$(document).ready(function(){

    var database = firebase.database();

    var messagesRef = database.ref('chat/');

    messagesRef.off();

    messagesRef.limitToLast(50).on('child_added', function(snapshot){
        //var data = "<div class='mblm-item mblm-item-left'><div>" + snapshot.child('message').val() + "</div><small>" + snapshot.child('name').val() + "</small></div>";
        if (name == snapshot.child('name').val()) {
            var data = "<div class='mblm-item mblm-item-right'><div>" + snapshot.child('message').val() + "</div><small>" + snapshot.child('name').val() + "</small></div>";
        }else{
            var data = "<div class='mblm-item mblm-item-left'><div>" + snapshot.child('message').val() + "</div><small>" + snapshot.child('name').val() + "</small></div>";
        }
         $("#chat-messages").html($("#chat-messages").html() + data);

                        // Show the card fading-in and scroll to view the new message.
                        setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        var list = document.getElementById('chat-messages');
                        list.scrollTop = list.scrollHeight;
                        //this.messageInput.focus();
                    });
    messagesRef.limitToLast(50).on('child_changed', function(snapshot){
        //var data = "<div class='mblm-item mblm-item-left'><div>" + snapshot.child('message').val() + "</div><small>" + snapshot.child('name').val() + "</small></div>";
        if (name == snapshot.child('name').val()) {
            var data = "<div class='mblm-item mblm-item-right'><div>" + snapshot.child('message').val() + "</div><small>" + snapshot.child('name').val() + "</small></div>";
        }else{
            var data = "<div class='mblm-item mblm-item-left'><div>" + snapshot.child('message').val() + "</div><small>" + snapshot.child('name').val() + "</small></div>";
        }
        $("#chat-messages").html($("#chat-messages").html() + data);

                        // Show the card fading-in and scroll to view the new message.
                        setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        var list = document.getElementById('chat-messages');
                        list.scrollTop = list.scrollHeight;
                        //this.messageInput.focus();
                    });

    $("#form").submit(function(e) {
        e.preventDefault();
        var mess = $("#msg").val();


        firebase.database().ref('chat/' + Date.now()).set({
            message: mess,
            name: name

        });

        $("#msg").val("");
    });



               /* const messaging = firebase.messaging();
                var userid = $("#userid").val();

                saveMessagingDeviceToken = function(){
                	messaging.getToken().then(function(currentToken){
                		if (currentToken) {
                			console.log('Got FCM device token:', currentToken);
                			firebase.database().ref('/fcmTokens').child(currentToken).set(userid)
                		}else{
                			requestPermission();
                		}
                	});
                };

            
               messaging.requestPermission()
               .then(function(){
               	console.log("Have permisiion");
               	saveMessagingDeviceToken();
               })
               .catch(function(error){
               	console.error('Error Occured');
               })*/


           });