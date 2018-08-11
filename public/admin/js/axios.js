


var url = '127.0.0.1:8000/';
//console.log('Start Loading');
axios.get(url)
.then(({data}) => {
    console.log('Stop loading')
    console.log('it is successful')
})
.catch(({response}) => {
    console.log('Stop loading')
    console.log('oosp!! something went wrong')
})