import firebase from "firebase/compat/app";
import "firebase/database";
import 'firebase/compat/auth';

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyBHWoRQowh-4opROJXwG5R147WNFLGpwIk",
  authDomain: "autenticacao-54571.firebaseapp.com",
  projectId: "autenticacao-54571",
  storageBucket: "autenticacao-54571.appspot.com",
  messagingSenderId: "333287484167",
  appId: "1:333287484167:web:c9ff994d97c186c8fd33a2"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

export default firebase;