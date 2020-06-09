import React, {useState} from 'react';
import ReactDOM from 'react-dom';

function FollowButton({follows, user}) {
    let userJSON = JSON.parse(user)
    console.log(follows)
    let [state, setState] = useState(follows) 
    const follow = () => {
        axios.post(`/follow/${userJSON.id}`)
            .then(res => {
                setState(!state)
                console.log(res.data)
            })
            .catch(err => {
                if(err.response.status == 401){
                   window.location = '/login' 
                }
            })
    }

    return (
        <div>
          <button 
            className={`btn ${state ? 'btn-outline-primary' : 'btn-primary'} ml-4 pb-2`} 
            onClick={follow} >
            {state ? 'Unfollow' : 'Follow'}
         </button>
        </div>
    );
}

export default FollowButton;

const followButton = document.getElementById('follow-button')

if (followButton) {
    const props = Object.assign({}, followButton.dataset)
    ReactDOM.render(<FollowButton {...props}/>, followButton);
}
