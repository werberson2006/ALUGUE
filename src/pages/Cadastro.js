import React, {useState, useEffect} from 'react';
import { View, Text, StyleSheet, TextInput, TouchableOpacity, Alert} from "react-native";
import * as Animatable from 'react-native-animatable';
import {useNavigation} from '@react-navigation/native';

import firebase from '../../firebase';

export default function Cadastro() {

    const navigation = useNavigation();

    const [email, setEmail] = useState('');
    const [senha, setSenha] = useState('');

    const Cadastrar = () => {

        firebase.auth().createUserWithEmailAndPassword(email, senha).then(() =>{
            
            Alert.alert("USUÁRIO CADASTRADO COM SUCESSO!", "Verifique seu email ou caixa de spam para ativar a conta.");

            firebase.auth().currentUser.sendEmailVerification().then(()=>{});

            navigation.navigate("login");

        }).catch(()=>{
            Alert.alert("ERRO AO CADASTRAR :(", "Email deve ser válido   |   Não possuir cadastro        A senha deve conter 6 caracteres.")
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

                {email === '' || senha === ''
                ?
                    <TouchableOpacity 
                        style={styles.buttonApagado}
                        disabled={true}
                    >
                    <Text style={styles.buttonText}>Cadastrar</Text>
                    </TouchableOpacity>
                :
                    <TouchableOpacity 
                        style={styles.button} onPress={Cadastrar} >

                        <Text style={styles.buttonText}>Cadastrar</Text>
                    
                    </TouchableOpacity>
                
                }
        
                <TouchableOpacity style={styles.voltar}>
                    <Text>
                        <Text style={styles.textoVoltar} onPress={() => navigation.navigate('login')}>Já tem uma conta? Entre!</Text>
                    </Text>
                </TouchableOpacity>
            </Animatable.View>
        </View>
    );
}

const styles = StyleSheet.create({
    container:{
        flex: 1
    },

    containerHeader: {
        marginTop: "50%",
        marginBottom: "0%",
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
        alignItems: "center",
        marginBottom: "70%"
        
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
        paddingHorizontal: 10,
        marginBottom: 10,
        borderRadius: 5,
        backgroundColor: "#DCDCDC"
    },

    containerForm: {
        justifyContent: "center",
        alignItems: "center",
        marginBottom: 500,
        
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
        color: "white",
    },

    voltar:{
        paddingTop: 90,
    },

    textoVoltar:{
        fontSize: 17,
        fontStyle: "italic",
    },

})