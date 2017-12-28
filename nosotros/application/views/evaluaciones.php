<?=n_row_12()?>    
    <div>
      <div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">
        <ul class="event-list">          
          <li>
            <time>
              <span class="day">
                4.3
              </span>
              <span class="month">
                Ranking
              </span>              
            </time>
            <div class="info">
              <h2 class="title">
                Calidad en el servicio
              </h2>
              <p class="desc">
                57 Encuestados
              </p>
              <ul>
                <li style="width:50%;">
                  <a>
                    <span class="fa fa-globe">
                    </span> 
                    Inspeccionar encuesta 
                  </a>
                </li>
                <li style="width:50%;">
                  Registro 17/Nov/2016 
                </li>
              </ul>
            </div>            
          </li>          
        </ul>
      </div>
    </div>
<?=end_row()?>
  

<style type="text/css">
    
    .event-list {
    list-style: none;
    font-family: 'Lato', sans-serif;
    margin: 0px;
    padding: 0px;
  }
  .event-list > li {
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 0px 5px rgb(51, 51, 51);
    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
    padding: 0px;
    margin: 0px 0px 20px;
  }
  .event-list > li > time {
    display: inline-block;
    width: 100%;
    color: rgb(255, 255, 255);
    background-color: #428bca;
    padding: 5px;
    text-align: center;
    text-transform: uppercase;
  }
  
  .event-list > li > time > span {
    display: none;
  }
  .event-list > li > time > .day {
    display: block;
    font-size: 56pt;
    font-weight: 100;
    line-height: 1;
  }
  .event-list > li time > .month {
    display: block;
    font-size: 1.5em;
    font-weight: 900;
    line-height: 1;
  }
  .event-list > li > img {
    width: 100%;
  }
  .event-list > li > .info {
    padding-top: 5px;
    text-align: center;
  }
  .event-list > li > .info > .title {
    font-size: 17pt;
    font-weight: 700;
    margin: 0px;
  }
  .event-list > li > .info > .desc {
    font-size: 13pt;
    font-weight: 300;
    margin: 0px;
  }
  .event-list > li > .info > ul,
  .event-list > li > .social > ul {
    display: table;
    list-style: none;
    margin: 10px 0px 0px;
    padding: 0px;
    width: 100%;
    text-align: center;
  }
  .event-list > li > .social > ul {
    margin: 0px;
  }
  .event-list > li > .info > ul > li,
  .event-list > li > .social > ul > li {
    display: table-cell;
    cursor: pointer;
    color: rgb(30, 30, 30);
    font-size: 11pt;
    font-weight: 300;
        padding: 3px 0px;
  }
  

  @media (min-width: 768px) {
    .event-list > li {
      position: relative;
      display: block;
      width: 100%;
      height: 120px;
      padding: 0px;
    }
    .event-list > li > time,
    .event-list > li > img  {
      display: inline-block;
    }
    .event-list > li > time,
    .event-list > li > img {
      width: 120px;
      float: left;
    }
    .event-list > li > .info {
      background-color: white;
      overflow: hidden;
    }
    .event-list > li > time,
    .event-list > li > img {
      width: 120px;
      height: 120px;
      padding: 0px;
      margin: 0px;
    }
    .event-list > li > .info {
      position: relative;
      height: 120px;
      text-align: left;
      padding-right: 40px;
    } 
    .event-list > li > .info > .title, 
    .event-list > li > .info > .desc {
      padding: 0px 10px;
    }
    .event-list > li > .info > ul {
      position: absolute;
      left: 0px;
      bottom: 0px;
    }
    .event-list > li > .social {
      position: absolute;
      top: 0px;
      right: 0px;
      display: block;
      width: 40px;
    }
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
    .event-list > li > .social > ul > li {      
      display: block;
            padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
      display: block;
      width: 40px;
      padding: 10px 0px 9px;
    }
  }
</style>