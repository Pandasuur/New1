const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const UserSchema = new Schema({
    username:{
        type:String,
        unique:true,
        require:true
    },
   
    password:{
        type:String,
        require:true
    },
    date:{type:Date,default:new Date() }
})

// crear modelo
const User = mongoose.model('User', UserSchema);

module.exports = User;