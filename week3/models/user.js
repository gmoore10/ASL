var User = function(data, req) {
    this.data = data;
    this.req = req;
}

User.prototype.data = {};

User.prototype.getAll = function(callback) {
    this.req.getConnection(function(err,connetion) {
        var query = connection.query("SELECT * FROM users", function(err, rows) {
            callback(rows);
        })
    })
}

module.exports = User;