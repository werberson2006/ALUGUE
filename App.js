import React from 'react';
import 'react-native-gesture-handler';
import Routes from './src/router';
import {useFonts, Montserrat_400Regular, Montserrat_500Medium, Montserrat_700Bold} from '@expo-google-fonts/montserrat';

export default function App() {
  
  useFonts({
    Montserrat_400Regular,
    Montserrat_500Medium,
    Montserrat_700Bold
  })

  return (
    
    <Routes></Routes>

  );
}

