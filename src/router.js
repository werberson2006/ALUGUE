import React from "react";
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { Feather } from '@expo/vector-icons';
import { TouchableOpacity } from 'react-native';

import Initial from './pages/Initial';
import Home from './pages/Home';
import Detail from './pages/Detail';
import Login from "./pages/Login";
import Cadastro from "./pages/Cadastro";

const Stack = createNativeStackNavigator();

function Routes(){
    return(
        <NavigationContainer>
            <Stack.Navigator initialRouteName="inicio">
                
                <Stack.Screen
                name="inicio"
                component={Initial}
                options={{headerShown: false}}
                >
                </Stack.Screen>
                
                <Stack.Screen
                name="login"
                component={Login}
                options={{headerShown: false}}
                />

                <Stack.Screen
                name="cadastro"
                component={Cadastro}
                options={{
                    title: 'CADASTRO', 
                }}
                />

                <Stack.Screen 
                name="home" 
                component={Home}
                options={{
                    title: 'ALUGUEL FÁCIL', 
                    

                    headerRight: () =>(
                        <TouchableOpacity style={ {marginRight: 15} }>
                            <Feather 
                            name="shopping-bag" 
                            size={24}
                            color="black"
                            />
                
                        </TouchableOpacity>
                    )

                    
                }}
                />

                <Stack.Screen 
                name="detail" 
                component={Detail}
                options={{
                    title: 'DETALHES',
                    

                    headerRight: () =>(
                        <TouchableOpacity style={ {marginRight: 15} }>
                            <Feather 
                            name="shopping-bag" 
                            size={24}
                            color="#000"
                            />
                
                        </TouchableOpacity>
                    )
                }}
                />    
            </Stack.Navigator>
        </NavigationContainer>
    );
}

export default Routes;