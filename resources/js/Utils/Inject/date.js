import { format } from 'date-fns'

export default {
    install: (app) => {
        // timestamp (in seconds) or *1000 first
        app.config.globalProperties.$timeStampToLocale = (timestamp) => {
            const date = new Date(timestamp);
            return format(date, " d MMMM yyyy - hh:ii a");
        }
    }
}