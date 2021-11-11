import Navbar from './innerNavbar'
import Footer from './footer'

export default function Layout({ children }) {
  return (
    <div>
      <Navbar   />
      {children}
    </div>
  )
}