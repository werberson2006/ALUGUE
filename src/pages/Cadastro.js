
import React, {useState, useEffect} from 'react';
import { View, Text, StyleSheet, TextInput, TouchableOpacity, Alert} from "react-native";
import * as Animatable from 'react-native-animatable'
import firebase from '../../firebase';
import {MaterialCommunityIcons} from "@expo/vector-icons"

import {useNavigation} from '@react-navigation/native'

export default function Cadastro() {

    const navigation = useNavigation();

    const [email, setEmail] = useState('');
    const [senha, setSenha] = useState('');
    const [erroCadastro, setErroCadastro] = useState('')

    const Cadastrar = () => {

        firebase.auth().createUserWithEmailAndPassword(email, senha).then(() =>{
            Alert.alert("Feito!", "Usuário cadastrado com sucesso.");
            firebase.auth().currentUser.sendEmailVerification().then(()=>{
                console.log("ENVIOU!");
                
            });
            navigation.navigate("login")
        }).catch((error)=>{
            setErroCadastro(true)
            let errorCode = error.code;
            let errorMessage = error.message;
        })
    }

    useEffect(()=>{
        
    }, []);
        

    return (
        <View style={styles.container}>
            
            <View style={styles.containerLogo}>
                <Animatable.Image
                    animation="flipInY"
                    source={require("../../assets/logo_verde.png")}
                    style={{width: "30%"}}
                    resizeMode="contain"
                />
            </View>

            <Animatable.View animation="fadeInDown" delay={400} style={styles.containerHeader}>
            <Text style={styles.message}>Cadastro</Text>
            </Animatable.View>

            <Animatable.View animation="fadeInUp" style={styles.containerForm}>
                
                <TextInput
                style={styles.input}
                placeholder='Email'
                type="text"
                onChangeText={(textEmail) => setEmail(textEmail)}
                value={email}
                />

                <TextInput
                style={styles.input}
                placeholder='Senha'
                type="text"
                onChangeText={(textSenha) => setSenha(textSenha)}
                value={senha}
                secureTextEntry={true}
                />

                {erroCadastro === true
                    ?
                    <View style={styles.alerta}>
                        <MaterialCommunityIcons
                        name="alert-circle"
                        size={24}
                        color="#bdbdbd"
                        />
                        <Text style={styles.warningAlert}>Email ou senha inválidos!</Text>
                            
                        
                    </View>
                    :
                    <View/>
                }

                {email === "" || senha === ""
                ?
                <TouchableOpacity 
                style={styles.buttonApagado}
                disabled={true}
                >
                    <Text style={styles.buttonText}>Cadastrar</Text>
                </TouchableOpacity>
                :
                <TouchableOpacity 
                style={styles.button} onPress={Cadastrar}
                
                >
                    <Text style={styles.buttonText}>Cadastrar</Text>
                </TouchableOpacity>
                }
                

            </Animatable.View>
            
            

        </View>
    );
}

const styles = StyleSheet.create({
    container:{
        flex: 1
    },

    containerHeader: {
        marginTop: "30%",
        marginBottom: "10%",
        paddingStart: "5%",
        alignItems: "center",
        justifyContent: "center",
        alignSelf: "center"
    },

    message: {
        position: "absolute",
        fontSize: 40,
        fontWeight: "bold",
        color: "#5CC6BA",
        alignSelf: "center",
        justifyContent: "center",
        alignItems: "center"
        
    },

    containerLogo:{
        flex:2,
        marginTop: "30%",
        justifyContent:"center",
        alignItems:"center",
    },

    input: {
        width: "90%",
        height: 40,
        paddingHorizontal: 8,
        marginBottom: 8,
        borderRadius: 4,
        backgroundColor: "#DCDCDC"
    },

    containerForm: {
        justifyContent: "center",
        alignItems: "center",
        marginBottom: "30%",
        marginTop: "12%"
    },

    labelError: {
        alignSelf: "flex-start",
        marginLeft: "5%",
        color: "#ff375b",
        marginBottom: 8,
    },

    button: {
        width: "90%",
        height: 40,
        borderRadius: 24,
        alignContent:"center",
        alignItems: "center",
        justifyContent: "center",
        backgroundColor: "#5CC6BA",
        alignSelf: "center"
    },

    buttonApagado: {
        width: "90%",
        height: 40,
        borderRadius: 24,
        alignContent:"center",
        alignItems: "center",
        justifyContent: "center",
        backgroundColor: "#bdbdbd",
        alignSelf: "center"
    },

    buttonText: {
        fontSize:20,
        fontWeight: "bold",
        color: "white"
    },

    buttonEsqueceu: {
        marginTop: 20,
    },

    textEsqueceu: {
        color: "#ff375b",
        fontSize: 15,
        fontWeight: "bold"
    },

    buttonCadastre: {
        alignSelf:"center",
        marginBottom: "50%",
    },

    textCadastro: {
        alignSelf: "center",
        fontSize: 16,
        fontStyle: "italic",
        fontWeight: "bold"
    },

    alerta: {
        marginTop: 20,
        flexDirection: "row",
        justifyContent:"center",
        alignItems: "center",
        paddingBottom: 15,
    },

    warningAlert: {
        paddingLeft:10,
        color: "#bdbdbd",
        fontSize: 16
    },




})