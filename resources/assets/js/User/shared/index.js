function logout(){
    axios.post('/logout');
    window.location.href = '/login';
}