//IMPORTAÇÃO DE BIBLIOTECAS
import React from "react";
import { View, Text, StyleSheet} from "react-native";
import {ScrollView, TextInput} from 'react-native-gesture-handler';
import { Feather } from '@expo/vector-icons';
import { useNavigation } from '@react-navigation/native';

//IMPORTAÇÃO DE COMPONENTES
import Novidades from '../components/Novidades';
import Proximo from "../components/Proximo";
import Recomendados from "../components/Recomendados";

export default function Home(props){

    const navigation = useNavigation();
    
    return (

        //PESQUISA
        <ScrollView showsVerticalScrollIndicator={false}
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

            <View style={styles.contentNew}>
                <Text style={styles.title}>Novidades</Text>
            </View>

            <ScrollView horizontal showsHorizontalScrollIndicator={false} style={{paddingHorizontal: 15,}}>
                <Novidades 
                cover={require('../assets/CASA1.jpg')}
                name="Casa Condomínio"
                description="Ambientes planejados para total conforto, segurança e privacidade."
                preco="R$ 1.622.250"
                onPress={() => navigation.navigate('detail')}
                />
                
                <Novidades 
                cover={require('../assets/CASA2.jpg')}
                name="Casa - Zona Leste"
                description="Ótima casa reformada, com 190 m², 3 quartos, 1 Suíte, 2 semi-suíte."
                preco="R$ 630.000"
                onPress={() => navigation.navigate('detail')}
                />
                
                <Novidades 
                cover={require('../assets/CASA3.jpg')}
                name="Casa de Praia"
                description="Casa nova a uma quadra do mar, lugar seguro e monitorado 24 horas."
                onPress={() => navigation.navigate('detail')}
                />
            </ScrollView>

            <View style={{flexDirection: 'row', marginBottom: 10, alignItems: 'center'}}>
                <Text style={[styles.title, {marginTop: 20}]}>Próximo de você</Text>
            </View>

            <ScrollView horizontal showsHorizontalScrollIndicator={false} style={{paddingHorizontal: 15}}>
                <Proximo
                    cover={require('../assets/house4.jpg')}
                    descrip="Casa 12 quartos"
                    price="R$ 50.000,00"
                />

                <Proximo
                    cover={require('../assets/house5.jpg')}
                    descrip="Casa 5 quartos"
                    price="R$ 1200,00"
                />

                <Proximo
                    cover={require('../assets/house6.jpg')}
                    descrip="Casa 9 quartos"
                    price="R$ 20.000,00"
                />

                
            </ScrollView>

            <Text style={[styles.title, {marginTop: 20}]}>
                Dica do dia
            </Text>

            <ScrollView horizontal showsHorizontalScrollIndicator={false} style={{paddingHorizontal: 15}}>
                <Recomendados
                    cover={require('../assets/CASA1.jpg')}
                    house="Casa condomínio"
                    offer="20%"
                />

                <Recomendados
                    cover={require('../assets/CASA2.jpg')}
                    house="Casa - Zona Leste"
                    offer="15%"
                />

                <Recomendados
                    cover={require('../assets/CASA3.jpg')}
                    house="Casa de Praia"
                    offer="30%"
                />

            </ScrollView>

        </ScrollView>


    );
}

const styles = StyleSheet.create({
    
    header:{
        paddingHorizontal: 15,
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'center',
        width: '100%',
        marginVertical: 20,
        
    },  

    inputArea: {
        paddingHorizontal: 15,
        flexDirection: 'row',
        alignItems: 'center',
        width: '98%',
        backgroundColor: "#FFF",
        elevation: 2,
        paddingHorizontal: 10,
        height: 37,
        borderRadius:10,
        
    },

    input:{
        
        paddingHorizontal: 10,
        fontSize: 13,
        width: '90%',
        fontFamily: 'Montserrat_500Medium'
    },  

    contentNew: {
        flexDirection: 'row',
        width: '100%',
        alignItems: 'center',
    },

    title: {
        paddingHorizontal: 15,
        fontFamily: 'Montserrat_700Bold',
        fontSize: 18,
        color: '#4f4a4a',
    },
});