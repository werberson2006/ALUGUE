import React from "react";
import { NavigationContainer } from '@react-navigation/native';
import { createNativeStackNavigator } from '@react-navigation/native-stack';
import { Feather } from '@expo/vector-icons';
import { TouchableOpacity} from 'react-native';

import Inicio from './pages/Inicio';
import Home from './pages/Home';
import Detalhes from './pages/Detalhes';
import Login from "./pages/Login";
import Cadastro from "./pages/Cadastro";

const Stack = createNativeStackNavigator();

function Routes(){
    return(
        <NavigationContainer>
            <Stack.Navigator initialRouteName="inicio">
                
                <Stack.Screen
                name="inicio"
                component={Inicio}
                options={{headerShown: false}}
                />
                
                <Stack.Screen
                name="login"
                component={Login}
                options={{headerShown: false}}
                />

                <Stack.Screen
                name="cadastro"
                component={Cadastro}
                options={{
                   headerShown: false 
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
                component={Detalhes}
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