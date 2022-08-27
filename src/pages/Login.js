import React, {useState, useEffect} from 'react';
import { View, Text, StyleSheet, TextInput, TouchableOpacity, Alert} from "react-native";
import * as Animatable from 'react-native-animatable';
import {useNavigation} from '@react-navigation/native';

import firebase from '../../firebase';

export default function Login() {

    const user = firebase.auth().currentUser;

    const navigation = useNavigation();

    const [email, setEmail] = useState('');
    const [senha, setSenha] = useState('');

    const Logar = () => {
        
        firebase.auth().signInWithEmailAndPassword(email,senha).then((userCredential)=>{
           let user = userCredential.user;
           
           if(user.emailVerified) {
            navigation.navigate('home', {idUser: user.uid})
           }else {
            Alert.alert("ERRO AO ACESSAR!", "Verifique seu email ou caixa de spam para ativar a conta.")
           }
           
        }).catch(()=>{
            Alert.alert("ERRO AO ACESSAR!", "Email ou senha inválidos.")
        })
    }
     
    useEffect(()=>{
        if (user) {
            navigation.navigate('home', {idUser: user.uid})
          }
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
            <Text style={styles.message}>Login</Text>
            </Animatable.View>

            <Animatable.View animation="fadeInUp" style={styles.containerForm}>
                
                <TextInput
                style={styles.input}
                placeholder='Email'
                type="text"
                onChangeText={(textEmail) => setEmail(textEmail)}
                value={email}
                maxLength={50}
                />

                <TextInput
                style={styles.input}
                placeholder='Senha'
                type="text"
                onChangeText={(textSenha) => setSenha(textSenha)}
                value={senha}
                secureTextEntry={true}
                maxLength={6}

                />

                {email === "" || senha === ""
                ?
                <TouchableOpacity 
                style={styles.buttonApagado}
                disabled={true}
                >
                    <Text style={styles.buttonText}>Entrar</Text>
                </TouchableOpacity>
                :
                <TouchableOpacity 
                style={styles.button} onPress={Logar}
                
                >
                    <Text style={styles.buttonText}>Entrar</Text>
                </TouchableOpacity>
                }
                

                <TouchableOpacity style={styles.buttonEsqueceu}>
                    <Text style={styles.textEsqueceu}>Esqueci minha senha!</Text>
                </TouchableOpacity>

            </Animatable.View>
            
            <Animatable.View animation="fadeInDown">
                
            <Text style={styles.buttonCadastre}>
            Não tem uma conta?
                <Text style={styles.textCadastro} onPress={() => navigation.navigate('cadastro')}> Cadastre-se!</Text>
            </Text>
            
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