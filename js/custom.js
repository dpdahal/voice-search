// if (!('webkitSpeechRecognition') in window) {
//     console.log('Voice not support update ')
// }
// var recognition = new webkitSpeechRecognition();
//
// recognition.onresult = function (event) {
//     let get_test = '';
//     for (let x = event.resultIndex; x < event.results.length; x++) {
//         if (event.results[x].isFinal) {
//             get_test += event.results[x][0].transcript;
//         } else {
//             get_test += event.results[x][0].transcript;
//         }
//     }
//     document.getElementById('get_response').value = get_test;
//
//     get_search(get_test);
// }
//
// function startRecord() {
//     recognition.start();
// }
//
// document.querySelector('#myBtn').addEventListener('click', function () {
//     startRecord();
// });
//
//
// function get_search(send_text) {
//     console.log(send_text);
//     return false;
//     $.ajax({
//         type: 'post',
//         url: "search.php",
//         data: {search_data: send_text},
//         success: function (response) {
//             $('#result').append(response);
//         },
//         fail(error) {
//             console.log(error);
//         }
//
//     })
//
//
// }
//
//



