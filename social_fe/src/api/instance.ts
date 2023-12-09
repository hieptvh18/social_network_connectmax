import axios from 'axios'

export const baseURLApi = 'http://127.0.0.1:8000/api/v1'

// get token login -> parse logout api
const token = window.localStorage.getItem('token')
const headers = {
  Authorization: 'Bearer ' + token,
  'X-Requested-With': 'XMLHttpRequest',
  Accept: 'application/json',
  'Access-Control-Allow-Origin': '*',
  // 'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE',
  // 'Access-Control-Allow-Headers': 'Content-Type'
}

const Instance = axios.create({
  baseURL: baseURLApi,
  headers: headers
})

export default Instance;
