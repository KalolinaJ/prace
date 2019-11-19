*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
}

body{
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: 0.25fr 1fr 0.25fr;
    grid-template-rows: 0.25fr 1fr 0.5fr;
    grid-template-areas:
    "upper upper upper"
    "lefter centerUpper righter"
    "lefter centerLower righter";
    grid-gap:1px;
}

.upper{
    grid-area: upper;
    background: rgb(226, 81, 105);
}

.lefter{
    grid-area: lefter;
    background: rgb(230, 131, 148);
    display:flex;
    flex-wrap: wrap;
}

.righter{
    grid-area: righter;
    background: rgb(230, 131, 148);
    display: flex;
    flex-wrap: wrap;
}

p{
    margin-left:10px;
    margin-right: 10px;
    display: flex;
    justify-content: center;
    align-items: center;

}

.centerUpper{
    grid-area: centerUpper;
    background: lightpink;
    /* display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center; */
}

.phpUpper{
    width: 100%;
    display: flex;
    justify-content: center;
    height: 50%;
}

.centerLower{
    grid-area: centerLower;
    background: pink;
    display: flex;
    flex-wrap: wrap;

}

.phpLower{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    width: 100%;
    margin: auto;
}

.txt{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: auto;
    align-items: center;
}

.txt1{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 10%;
    align-items: center;
}

h1{
    display: flex;
    justify-content: center;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.button{
    display:flex;
    justify-content: space-around;
    align-items: center;
    background: rgb(243, 175, 223);
    width: 100px;
    height: 25px;
    border-radius: 25px;
}

.buttons{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 75px;
}

.buttons :hover{
    background: rgb(246, 224, 248);
}

img{
    width:90%;
    max-width: 180px;
    height: 25px;
    display: flex;
    justify-content: center;
    margin: auto;
}

.dol{
    width: 50%;
    max-width: 500px;
    height: 25%;
    margin: auto;
}

.form{
    width: 100%;
    display: flex;
    justify-content: center;
    height: auto;
    
}