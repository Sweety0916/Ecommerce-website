
const { Console } = require("console")
const myModel=document.querySelector('.modal')
async function signup(e){
    e.preventDefault()
  const email=document.querySelector('#signupEmail')  
  const password=document.querySelector('#signupPassword')  
console.log(email.value,password.value)
// const auth = getAuth();
const result= await firebase.auth().createUserWithEmailAndPassword( email.value, password.value)
 // M.toast({html: " password should be atleast 6 character $(result.user.email)",classes:"red"})

console.log(result)
// M.toast({message: " password should be atleast 6 character"})
email.value=""
password.value=""
M.Model.getInstance(myModel[0].close())
}




async function login(e){
    e.preventDefault()
  const email=document.querySelector('#loginEmail')  
  const password=document.querySelector('#loginPassword')  
// const auth = getAuth();
try{
const result= await firebase.auth().signInWithEmailAndPassword( email.value, password.value)
  M.toast({html: 'welcome $(result.user.email)',classes:"green"})
console.log(result)
}catch(er){
console.log(er)
 M.toast({message: " password should be atleast 6 character"})
}
email.value=""
password.value=""
}

function logout(){
    firebase.auth().signOut()
}


firebase.auth().onAuthStateChanged(auth, (user) => {
  if (user) {
    console.log(user)
  } else {
    console.log('signout successfully')
 M.toast({html:" signout successfully",classes:"green"}) }
});



//signin with google

async function loginWithGoogle(){
    try{
      var provider = new firebase.auth.GoogleAuthProvider();
    const result =  await firebase.auth()
    .signInWithPopup(provider)  
    console.log(result)
    }catch(err){
        console.log(err)
    }
    
  
}

