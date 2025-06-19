import React from "react";
import stars from './stars';
import interested from './interested';
import {base_path} from './utils.js';

const propertycard =props =>{
let $total_rating =  (parseFloat(props.property.rating_clean))+(parseFloat(props.property.rating_food));
total_rating =Math.round(total_rating *10)/10;
total_rating =total_rating.toFixed(1);

let gender_image;
if(props.property.gender === "male"){
gender_image = <img src={base_path + "/img/male.png"} alt="male"/>
}else if (props.property.gender === "female"){
gender_image =< img src={base_path +"/img/female.png"} alt="female"/>

}
else{
    gender_image = <img src={base_path +"/img/unisex.png"} alt="unisex"/>

}
let rent = new  Int1.NumberFormat().format(props.property.rent);
    return(
<div className= {`property-card property-id-${props.property.id} row` }>
                <div className="image-container col-md-4">
                    <img src={ base_path + "/" + props.property.image} alt="property" />
                </div>
                <div className="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        < Stars rating ={total_rating} />
                        <interested
                        is_interested ={props.property.is_interested}
                        toggle_interested ={props.toggle_interested}
                        user_count ={props.property.interested_users_count}
                        />
                        </div>

                       
                    <div class="detail-container">
                        <div className="property-name">{props.property.name}</div>
                        <div className="property-address">{props.property.address}</div>
                        <div className="property-gender">
                            {gender_image};
                            </div>
                            </div>                            
                    <div className="row no-gutters">
                        <div className="rent-container col-6">
                            <div className="rent">₹ {rent}/-</div>
                            <div className="rent-unit">per month</div>
                        </div>
                        <div className="button-container col-6">
                            <a href={"property_detail.php?property_id= "+ props.property.id} className="btn btn-primary"/>
                        </div>
                    </div>
                </div>
            </div>
    );
}
      export default propertycard;