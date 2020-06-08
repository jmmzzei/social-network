import React from 'react';
import ReactDOM from 'react-dom';

function FollowButton(props) {
    let user = JSON.parse(props.user.user)
    const follow = () => {
        axios.post(`/follow/${user.id}`)
            .then(res => {
                alert(res.data)
            })
    }

    return (
        <div>
          <button className="btn btn-primary ml-4 pb-2" onClick={follow} >Follow</button>
        </div>
    );
}

export default FollowButton;

const followButton = document.getElementById('follow-button')

if (followButton) {
    const props = Object.assign({}, followButton.dataset)
    ReactDOM.render(<FollowButton user={props}/>, followButton);
}
