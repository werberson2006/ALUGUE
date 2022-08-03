import 'react-native-gesture-handler';
import { StatusBar } from 'expo-status-bar';
import React, {useCallback, useEffect, useState} from 'react';
import { StyleSheet, Text, View } from 'react-native';
import { useFonts, Montserrat_500Medium, Montserrat_700Bold, Montserrat_400Regular} from '@expo-google-fonts/montserrat';
import AppLoading from 'expo-app-loading';


import Routes from './src/router';


export default function App() {

  let [fontsLoaded] = useFonts({
    Montserrat_500Medium,
    Montserrat_700Bold,
    Montserrat_400Regular
  });

  if (!fontsLoaded) {
    return <AppLoading />;
  }

  return (

    <Routes></Routes>
  );
}

