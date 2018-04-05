var idVal = document.getElementById('active');
var idValActive = idVal.value;

switch(idValActive) {
    case "index":
        document.getElementById('index').classList.add('active')
    break
    case "about":
        document.getElementById('about').classList.add('active')
    break
    case "team":
        document.getElementById('team').classList.add('active')
    break
    case "contact":
        document.getElementById('contact').classList.add('active')
    break
    case "success":
        document.getElementById('success').classList.add('active')
    break
    default:
        document.getElementById('index').classList.add('active')
}