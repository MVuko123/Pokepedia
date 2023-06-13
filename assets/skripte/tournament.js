var playAreaDiv;
var playersSelected;
var winCount;
var winAreaDiv;
var score;
var usersWon;
var cellAdd;
var oldCell_lst;
var cells;
var btnStart;
var controlDiv;

window.onload = function(){
    playAreaDiv = document.getElementById("play-area");
    winAreaDiv = document.getElementById("win-area");
    btnStart = document.getElementById('btn-start-stop');
    controlDiv = document.getElementById('control');

    playersSelected = [];
    winCount = 0;
    score = [0, 0];
    usersWon = ["", ""];

    cells = ['q-l-1', 'q-l-2', 'q-l-3', 'q-l-4', 'q-r-1', 'q-r-2', 'q-r-3', 'q-r-4', 's-l-1', 's-l-2', 's-r-1', 's-r-2', 'f-l', 'f-r', 'w']
    cellAdd = ['q-l-1', 'q-l-2', 'q-l-3', 'q-l-4', 'q-r-1', 'q-r-2', 'q-r-3', 'q-r-4'];
    nextCell_lst = ['s-l-1', 's-l-1', 's-l-2', 's-l-2', 's-r-1', 's-r-1', 's-r-2', 's-r-2'];
    nextCell_lst2 = {
        's-l-1': 'f-l',
        's-l-2': 'f-l',
        's-r-1': 'f-r',
        's-r-2': 'f-r',
        'f-l': 'w',
        'f-r': 'w'
    }

    oldCell_lst = {
        's-l-1': ['q-l-1', 'q-l-2'],
        's-l-2': ['q-l-3', 'q-l-4'],
        's-r-1': ['q-r-1', 'q-r-2'],
        's-r-2': ['q-r-3', 'q-r-4'],
        'f-l': ['s-l-1', 's-l-2'],
        'f-r': ['s-r-1', 's-r-2'],
        'w': ['f-l', 'f-r']
    }
}

function pickUser(userId, username){
    for(var i = 0; i < playersSelected.length; i++){
        if(playersSelected[i] == userId){
            return;
        }
    }
    playersSelected.push(userId);

    var btnPlayer = "<button class=\"btn-player btn btn-primary\" disabled onclick=\"moveCell(" + userId + ",'" + username + "','" + nextCell_lst[playersSelected.length-1] + "')\">" + username + "</button>";
    var cell = document.getElementById(cellAdd[playersSelected.length-1]);
    cell.innerHTML = btnPlayer;

}

function moveCell(userId, username, nextCell){
    var oldCell;
    var winCell;
    for(i=0; i<oldCell_lst[nextCell].length; i++){
        oldCell = document.getElementById(oldCell_lst[nextCell][i]).firstChild;
        oldCell.disabled = true;
        oldCell.setAttribute("class", "btn-player btn btn-danger");
    }

    var btnPlayer = "<button class=\"btn-player btn btn-primary\" onclick=\"moveCell(" + userId + ",'" + username + "','" + nextCell_lst2[nextCell] + "')\">" + username + "</button>";
    var cell = document.getElementById(nextCell);
    cell.innerHTML = btnPlayer;

    if(nextCell != 'w'){
        usersWon[1] = usersWon[0];
        usersWon[0] = userId;
    }
    
    if(nextCell == 'w'){
        winCell = document.getElementById('w').firstChild;
        winCell.disabled = true;
        winCell.setAttribute("style", "background-color: green;");

        winGame();
    }
}

function startGame(){
    var cell;

    for(var i = 0; i < cellAdd.length; i++){
        cell = document.getElementById(cellAdd[i]).firstChild;
        cell.removeAttribute("disabled");
    }

    var playersTableDiv = document.getElementById('div-player-table');
    playersTableDiv.style.display = "none";
    
    btnStart.style.display = 'none';
}

winGame = function(){
    var submitBtn = document.createElement("a");
    submitBtn.setAttribute("class", "btn btn-success");
    submitBtn.setAttribute("href", "submit.php?user1=" + usersWon[0] + "&user2=" + usersWon[1]);
    submitBtn.innerHTML = "Submit";

    controlDiv.appendChild(submitBtn);
}

resetGame = function(){
    playersSelected = [];
    winCount = 0;
    score = [0, 0];
    usersWon = [];

    location.reload();
}