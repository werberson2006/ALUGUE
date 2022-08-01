import React from "react";
import { View, Text, StyleSheet} from "react-native";
import {ScrollView, TextInput} from 'react-native-gesture-handler';
import { Feather } from '@expo/vector-icons';

export default function Home(){
    return (
        <ScrollView
        showsVerticalScrollIndicator={false}
        style={{backgroundColor: '#FFF'}}
        >
            <View style={styles.header}>
                <View style={styles.inputArea}>
                    <Feather name="search" size={24} color="black"/>
                    <TextInput
                    placeholder="O que está procurando?"
                    style={styles.input}
                    />
                </View>
            </View>
        </ScrollView>
    );
}

const styles = StyleSheet.create({

});