

var name = "";        
var name = "";        
            $(document).ready(function(){
                
                    var database = firebase.database();

                var postRef = database.ref('post/');
                postRef.off();

                postRef.limitToLast(12).on('child_added', function(snapshot){
                        var data = "<div class='card-demo col-md-8'>" +
                                    "<div class='card'>"+
                                    "<div class='card-header'>"+
                                    "<h4 class='card-title'>"+snapshot.child('name').val()+"</h4>"+
                                    "<small class='card-subtitle'>32 minutes ago</small>"+
                                    "<div class='actions'><div class='dropdown actions__item'><i data-toggle='dropdown' class='zmdi zmdi-more-vert'></i></div></div></div>"+
                                    "<div class='card-block'><p>"+snapshot.child('message').val()+"</p></div></div></div>";

                        $("#posts").html($("#posts").html() + data);

                        // Show the card fading-in and scroll to view the new message.
                        //setTimeout(function() {document.getElementById('chat-messages').classList.add('visible')}, 1);
                        //var list = document.getElementById('chatscroll');
                        //list.scrollTop = list.scrollHeight;
                        //this.messageInput.focus();
                    });

                name = document.getElementById('name').innerHTML;
                    

                    $("#postButton").on('click', function(){
                    var mess = $("#postText").val();
                    mess = mess.replace(/\r?\n/g, '<br />');

                    
                    firebase.database().ref('post/' + Date.now()).set({
                        message: mess,
                        name: name,
                        postedOn: firebase.database.ServerValue.TIMESTAMP
                        
                    });
                    
                    $("#postText").val("");
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