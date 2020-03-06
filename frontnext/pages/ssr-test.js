<<<<<<< HEAD
import Layout from '../components/Layout';
import axios from 'axios';

class SSRTest extends React.Component {
    static async getInitialProps ({req}) {
        const response = await axios.get('https://jsonplaceholder.typicode.com/users');
        return {
            users: response.data
        }
    }

    render() {
        const { users } = this.props;

        const userList = users.map(
            user => <li key={user.id}>{user.username}</li>
        )
        
        return (
            <Layout>
                <ul>
                    {userList}
                </ul>
            </Layout>
        );
    }
}

=======
import Layout from '../components/Layout';
import axios from 'axios';

class SSRTest extends React.Component {
    static async getInitialProps ({req}) {
        const response = await axios.get('https://jsonplaceholder.typicode.com/users');
        return {
            users: response.data
        }
    }

    render() {
        const { users } = this.props;

        const userList = users.map(
            user => <li key={user.id}>{user.username}</li>
        )
        
        return (
            <Layout>
                <ul>
                    {userList}
                </ul>
            </Layout>
        );
    }
}

>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
export default SSRTest;