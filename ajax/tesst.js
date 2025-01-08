npm install firebase

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyC8bzyK1LRx4_NQ1-tvu1Y62W5pcxT-SXg",
  authDomain: "feda-4fc8c.firebaseapp.com",
  projectId: "feda-4fc8c",
  storageBucket: "feda-4fc8c.firebasestorage.app",
  messagingSenderId: "520216574349",
  appId: "1:520216574349:web:6cae3da30921f638daa5c4",
  measurementId: "G-WYSHTMH7HW"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
