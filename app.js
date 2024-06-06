const { createApp } = Vue;

createApp({
    data() {
        return {
            messages: [],
            newMes: ""
        }
    },
    methods: {
        fetchData() {
            axios.get('getdata.php').then((res) => {
                console.log(res.data);
                this.messages = res.data.results;
            })
        },
        addMessage() {
            if(!this.newMes) {
                return alert('Inserisci un messaggio!');
            }
            const data = {
                message: this.newMes,
                proprieta: 'ciaone',
                proprieta2: 'uso js!'
            }

            axios.post('write.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data',
                }
            }).then((res)=> {
                console.log(res.data);
                this.messages = res.data.results;
                this.newMes = '';
            })
        },

    }
})