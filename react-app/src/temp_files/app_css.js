import FilterBar from './Filterbar';
import filterModel from './filterModel';
import propertycard from './propertycard';
import noproperty from './noproperty';
import {base_path} from './utils.js';
const app = () =>{
    return(
        <>
        <div className="page_container">
        <filterbar/>

        <propertycard/>
        </div>
        <filterModel/>
        </>
    );
}
export default app;