import React from "react";
import { 
    View, 
    Text,
    StyleSheet,
    TouchableOpacity,

} from "react-native";

import * as Animatable from 'react-native-animatable' 

import {useNavigation} from  '@react-navigation/native'

export default function Inicio() {

    const navigation = useNavigation();

    return (
        <View style={styles.container}>
            <View style={styles.containerLogo}>
                <Animatable.Image
                    animation="flipInY"
                    source={require("../../assets/logo.png")}
                    style={{width: "50%"}}
                    resizeMode="contain"
                />
            </View>

            <Animatable.View delay={600} animation="fadeInUp" style={styles.containerForm}>
                <Text style={styles.title}>Aqui você encontrará opções de imóveis para alugar próximos a você!</Text>
                <Text style={styles.text}>Faça login para acessar</Text>

                <TouchableOpacity onPress={() => navigation.navigate('login')} style={styles.button}>
                    
                    <Text style={styles.buttonText}>Acessar</Text>
                </TouchableOpacity>
            </Animatable.View>

        </View>
    );
}

const styles = StyleSheet.create({
    container:{
        flex:1,
        backgroundColor:"#5CC6BA"
    },
    containerLogo:{
        flex:2,
        backgroundColor: "#5CC6BA",
        justifyContent:"center",
        alignItems:"center",
    },
    containerForm: {
        flex: 1,
        backgroundColor:"white",
        borderTopLeftRadius: 25,
        borderTopRightRadius: 25,
        paddingStart: "5%",
        paddingEnd: "5%"
    },

    title:{
        fontSize: 16,
        fontWeight:"bold",
        marginTop: 28,
        marginBottom: 12
    },

    text: {
      color: "#a1a1a1"  
    },

    button: {
        position: 'absolute',
        backgroundColor: "#5CC6BA",
        borderRadius: 50,
        paddingVertical: 8,
        width: "60%",
        alignSelf: "center",
        bottom: "15%",
        alignItems: "center",
        justifyContent: "center"
    },

    buttonText: {
        fontSize: 18,
        color: "white",
        fontWeight: "bold"
    }
})