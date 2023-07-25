describe('users', () => {
  it('visits the users url', () => {
    cy.visit('/users')
    cy.contains('h3', 'Users', { timeout: 10000 })
    cy.get('div.placeholder').should('not.exist')
  })

  it('visits the user url', () => {
    cy.visit('/user/1')
    cy.contains('h3', 'Weather at', { timeout: 10000 })
    cy.get('div.placeholder').should('not.exist')
  })
})
