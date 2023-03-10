import axios from "axios";

export default {
    install: (app, options) => {
        const ax = axios.create({
            baseURL: `https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?q=jakarta,id&APPID=${import.meta.env.VITE_APP_WEATHER}&units=metric`,
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Access-Control-Allow-Origin': '*',
                'Access-Control-Allow-Headers': '*',
                'Access-Control-Allow-Credentials': 'true'
            }
        })
        
        ax.interceptors.response.use(function (response) {
            return response;
        }, function (error) {
            console.log(error.message)
        });

        app.config.globalProperties.$axiosBase = ax
    }
}