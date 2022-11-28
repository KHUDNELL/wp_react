import React, { useState } from "react"

function TestComponent() {
  const [clickCount, setClickCount] = useState(0)

  return (
    <div className="test-component" onClick={() => setClickCount(prev => prev + 1)}>
      <h1>Hello from React!</h1>
      <p>You have clicked on this component {clickCount} times!</p>
    </div>
  )
}

export default TestComponent
