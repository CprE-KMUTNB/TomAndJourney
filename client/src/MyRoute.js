import {BrowserRouter , Routes, Route} from "react-router-dom"
import App from "./App"
import LoginComponent from "./components/LoginComponent"
import RegisterComponent from "./components/RegisterComponent"

function MyRoute(){

    return(
        <BrowserRouter>
        <Routes>
            <Route path="/" exact element={<App/>} />
            <Route path="/login" exact element={<LoginComponent/>} />
            <Route path="/logi" exact element={<LoginComponent/>} />
            <Route path="/register" exact element={<RegisterComponent/>} />
        </Routes>
</BrowserRouter>
    )
}
export default MyRoute;