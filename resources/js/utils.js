var isWeek = (weekNum) => {
    var todayDate = new Date()
    var todayWeek = todayDate.getWeek()

    if (process.env.MIX_TUTOR_MODE == 'false') {
        return true
    }

    console.log(process.env.MIX_TUTOR_MODE)
    console.log(process.env.MIX_TUTOR_MODE == 'false')
    return (todayWeek - 29) >= weekNum
    
}


Date.prototype.getWeek = function() {
    var onejan = new Date(this.getFullYear(),0,1);
    var today = new Date(this.getFullYear(),this.getMonth(),this.getDate());
    var dayOfYear = ((today - onejan + 86400000)/86400000);
    return Math.ceil(dayOfYear/7)
  };

  
export default {
    isWeek
}


// export { default as utils } from './progress'
