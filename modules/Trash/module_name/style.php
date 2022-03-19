<?php

echo "<style>
.software-manager{
    overflow: hidden
    }
    .header-section{
    background: #15324b;
    color: #fff;
    overflow: hidden;
    padding: 50px 30px;
    border: 1px solid #ddd;
    display:block;
    }
    .header-top{
    display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #99999929;
    }
    .header-left{
    float:left;
    color: #fff;
    }
    .header-left h2{
    color: #fff;
    height:30px;
    font-weight: bold;
    }
    .header-right{
    float:right;
    height:30px;
    }
    .header-right img{
    height: 100%;
    }
    .header-menu{
    list-style-type: none;
    padding: 0;
    margin: 0;
    }
    .header-menu li{
    display: inline-block;
    }
    .header-menu li a{
    display: inline-block;
    padding: 5px 10px;
    margin-right: 5px;
    margin-top: 5px;
    border: 1px solid #99999929;
    text-decoration: none;
    color: #fff;
    transition: .5s;
    border-radius: 10px
    }
    .header-menu li a:hover{
    background: #ffffff21;
    }
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 5px;
    }
    
    #customers tr:nth-child(even){ background-color: #f2f2f2; }
    
    #customers tr:hover { background-color: #ddd; }
    
    #customers th {
      padding-top: 5px;
      padding-bottom: 5px;
      text-align: left;
      background-color:#15324b;
      color: white;
    }

    
.select-group{
    display: flex;
    justify-content: space-between;
    align-items: center;
    background:  #15324b;
    padding: 5px 10px
    }
    .left-dropdown p{
    color: #fff;
    margin: 0
    }
    .dropbtn {
      background-color: #710d15;
      color: white;
      padding: 2px 16px;
      font-size: 14px;
      border: none;
      cursor: pointer;
    }
    
    .dropbtn:hover, .dropbtn:focus {
      background-color: #2980B9;
    }
    
    .dropdown {
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 5px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown a:hover {
    background-color: #ddd;
    }
    
    .show {
    display: block;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
    }
    
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    .card-content {
      padding: 16px;
    }
    input[type=text], select {
      width: 100%;
      padding: 5px 20px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 5px 20px;
      margin: 5px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type=submit]:hover {
      background-color: #45a049;
    }
    .create-key{
    display:flex;
    }
    .create-key form{
    width: 50%;
    }
    .create-key .instruction{
    padding: 30px;
    width: 50%;
    }
    .create-group{
    display:flex;
    }
    .create-group form{
    width: 50%;
    }
    .create-group .instruction{
    padding: 30px;
    width: 50%;
    }
  </style>";

  ?>