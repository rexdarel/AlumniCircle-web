var config = {
                apiKey: "AIzaSyAnV-GbTfyhGutT_8MBfRpqSJByRXMZCy0",
    authDomain: "alumni-chat-2e3d6.firebaseapp.com",
    databaseURL: "https://alumni-chat-2e3d6.firebaseio.com",
    projectId: "alumni-chat-2e3d6",
    storageBucket: "alumni-chat-2e3d6.appspot.com",
    messagingSenderId: "377311387120"
};
firebase.initializeApp(config);

var name = "";   
var name_user = document.getElementById('name_user').innerHTML;     

            $(document).ready(function(){
                
                    var database = firebase.database();

                    var messagesRef = database.ref('chat/');

                    messagesRef.off();
                    
                    messagesRef.limitToLast(50).on('child_added', function(snapshot){
                        

                        if(name_user == snapshot.child('name').val()){
                            var data = "<div class='messages__item messages__item--right'><img src='assets/demo/img/profile-pics/1.jpg' class='messages__avatar' alt=''><div class='messages__details'><p>" + snapshot.child('message').val() + "</p><small>" + snapshot.child('name').val() + "</small></div></div>";

                            $("#chat-messages").html($("#chat-messages").html() + data);
                        }else{
                            var data = "<div class='messages__item'><img src='assets/demo/img/profile-pics/1.jpg' class='messages__avatar' alt=''><div class='messages__details'><p>" + snapshot.child('message').val() + "</p><small>" + snapshot.child('name').val() + "</small></div></div>";

                            $("#chat-messages").html($("#chat-messages").html() + data);
                        }

                        // Show the card fading-in and scroll to view the new message.
                        setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        var list = document.getElementById('chat-messages');
                        list.scrollTop = list.scrollHeight;
                        //this.messageInput.focus();
                    });
                    messagesRef.limitToLast(50).on('child_changed', function(snapshot){
                        if(name_user == snapshot.child('name').val()){
                            var data = "<div class='messages__item messages__item--right'><img src='assets/demo/img/profile-pics/1.jpg' class='messages__avatar' alt=''><div class='messages__details'><p>" + snapshot.child('message').val() + "</p><small>" + snapshot.child('name').val() + "</small></div></div>";

                            $("#chat-messages").html($("#chat-messages").html() + data);
                        }else{
                            var data = "<div class='messages__item'><img src='assets/demo/img/profile-pics/1.jpg' class='messages__avatar' alt=''><div class='messages__details'><p>" + snapshot.child('message').val() + "</p><small>" + snapshot.child('name').val() + "</small></div></div>";

                            $("#chat-messages").html($("#chat-messages").html() + data);
                        }


                        // Show the card fading-in and scroll to view the new message.
                        setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        var list = document.getElementById('chat-messages');
                        list.scrollTop = list.scrollHeight;
                    });

                    //name = $("#name_user").innerHtml;
                                  
                $("#send_button").on('click', function(){
                    var mess = $("#msg").val();

                    
                    firebase.database().ref('chat/' + Date.now()).set({
                        message: mess,
                        name: name_user
                        
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