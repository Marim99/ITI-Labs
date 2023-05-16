import React from "react";

export default function Student({ student }) {
  return (
    <tr>
      <td>{student.name}</td>
      <td>{student.age}</td>
    </tr>
  );
}
